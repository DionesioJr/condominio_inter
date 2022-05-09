<link href='<?php echo BASE_URL; ?>/assets/css/style.css' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<div id="chat">
    <div id="sidepanel">
        <div id="profile">
            <div class="wrap">
                <img id="profile-img" src="<?php echo BASE_URL; ?>/assets/img/avata.png" class="online" alt="" />
                <p><?php echo $_SESSION['user']['name']; ?></p>

            </div>
        </div>
        <div id="contacts">
            <ul>
                <li class="contact" v-for="user in users" v-bind:key="user.id" :class="user.id == userActive.id ?? active" @click="setUserActive(user)">
                    <div class="wrap">
                        <!-- <span class="contact-status online"></span> -->
                        <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
                        <div class="meta">
                            <p class="name">{{user.name}}</p>
                            <p class="preview">Oi como vai ?</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contact-profile">
            <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
            <p>{{userActive.name}}</p>

        </div>
        <div class="messages" style="background-image: url(<?php echo BASE_URL; ?>/assets/img/whatsapp.png)">
            <div>
                <ul>
                    <div v-for="message in messages">
                        <li class="replies" v-if="message.to == userActive.id">
                            <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
                            <p>{{message.message}}</p>
                        </li>

                        <li class="sent" v-else>
                            <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
                            <p>{{message.message}}</p>
                        </li>

                    </div>

                </ul>
            </div>
        </div>
        <div class="message-input">
            <div class="wrap">
                <input type="text" placeholder="Escreva sua mensagem..." />
                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?php echo BASE_URL; ?>";

    Vue.createApp({
        data() {
            return {
                messages: JSON.parse(localStorage.getItem('messages')) ?? [],
                users: JSON.parse(localStorage.getItem('users')) ?? [],
                userActive: JSON.parse(localStorage.getItem('user_active')) ?? [],
            }
        },
        mounted() {
            this.getUsers();
            this.controlLayout();
            this.getMessages(this.userActive);

            if (this.userActive) {
                setInterval(() => {
                    this.getMessages(this.userActive);
                }, 2000);
            }
        },
        computed: {

        },
        methods: {
            async getUsers() {
                this.users = await axios.get(base_url + '/messages/getUsersAjax')
                    .then(function(response) {
                        localStorage.setItem('users', JSON.stringify(response.data));
                        return response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

            },

            async getMessages(to) {
                this.messages = await axios.get(base_url + '/messages/getMessagesAjax/?to=' + to.id)
                    .then(function(response) {
                        localStorage.setItem('messages', JSON.stringify(response.data));
                        return response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

            },
            async sendMensage() {
                axios.post('/user', {
                        firstName: 'Fred',
                        lastName: 'Flintstone'
                    })
                    .then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            },

            setUserActive(user) {
                this.userActive = this.users[user.id];
                localStorage.setItem("user_active", JSON.stringify(user));
                this.getMessages(user.id);
            },
            controlLayout() {
                $(".messages").animate({
                    scrollTop: $(document).height()
                }, "fast");
            }

        },

    }).mount('#chat')
</script>

<script>
    function newMessage() {
        message = $(".message-input input").val();
        if ($.trim(message) == '') {
            return false;
        }
        $('<li class="sent"><img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" /><p>' + message +
            '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .preview').html('<span>Você: </span>' + message);
        $(".messages").animate({
            scrollTop: $(document).height()
        }, "fast");
    };

    $('.submit').click(function() {
        newMessage();
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });
    //# sourceURL=pen.js
</script>