<link href='<?php echo BASE_URL; ?>/assets/css/style.css' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vuex@4.0.0/dist/vuex.global.js"></script>

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
                <li class="contact" v-for="user in users" v-bind:key="user.id" @click="setUserActive(user)">
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
            <p>{{user.name}}</p>

        </div>
        <div class="messages" v-if="messages" style="background-image: url(<?php echo BASE_URL; ?>/assets/img/whatsapp.png)">
            <div>
                <ul>
                    <div v-for="msg in messages">
                        <li class="replies" v-if="msg.to == user.id">
                            <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
                            <p>{{msg.message}}</p>
                        </li>

                        <li class="sent" v-else>
                            <img src="<?php echo BASE_URL; ?>/assets/img/avata.png" alt="" />
                            <p>{{msg.message}}</p>
                        </li>

                    </div>

                </ul>
            </div>
        </div>
        <div class="message-input" v-if="user.id">
            <div class="wrap">
                <input type="text" v-on:keyup.enter="sendMessage" v-model="message" placeholder="Escreva sua messagem..." />
                <button class="submit" v-on:click="sendMessage"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?php echo BASE_URL; ?>";

    // const store = new Vuex.Store({
    //     state: {
    //         userIdActive: 0,
    //         users: []
    //     },
    //     mutations: {
    //         SET_ALL_USERS: (state, data) => {
    //             state.users = data;
    //         },
    //         SET_USER: (state, data) => {
    //             state.user = data;
    //             state.users.push(data);
    //         },
    //         UPDATE_USER: (state, data) => {
    //             state.user = data;
    //             const index = state.users.findIndex(i => i.id === data.id);
    //             state.users.splice(index, 1, data);
    //         },
    //         SET_MESSAGE_USER: (state, data) => {
    //             const index = state.users.findIndex(i => i.id === data.id);
    //             state.users[index].messages.push(data);
    //         },
    //     },
    //     getters: {
    //         getUserActive(state, data) {
    //             const index = state.users.findIndex(i => i.id === data.id);
    //             if (index) {
    //                 return state.users[index];
    //             }
    //             return [];
    //         }
    //     },
    //     actions: {
    //         getUsers: (context, payload) => {
    //             return new Promise((resolve, reject) => {
    //                 axios.get(base_url + '/messages/getUsersAjax').then((response) => {
    //                     context.commit("SET_ALL_USERS", response.data);
    //                     resolve(response.data);
    //                 }).catch((error) => {
    //                     reject(error);
    //                 });
    //             });
    //         },
    //         getMessages: (context, payload) => {
    //             return new Promise((resolve, reject) => {
    //                 axios.get(base_url + '/messages/getMessageAjax', payload).then((response) => {
    //                     context.commit("SET_MESSAGE_USER", response.data);
    //                     resolve(response.data);
    //                 }).catch((error) => {
    //                     reject(error);
    //                 });
    //             });
    //         },
    //         sendMessages: (context, payload) => {
    //             return new Promise((resolve, reject) => {
    //                 axios.get(base_url + '/messages/sendMessageAjax', payload).then((response) => {
    //                     resolve(response.data);
    //                 }).catch((error) => {
    //                     reject(error);
    //                 });
    //             });
    //         }
    //     }
    // });


    const app = Vue.createApp({
        data() {
            return {
                messages: [],
                message: '',
                user: {},
                users: [],
            }
        },
        mounted() {
            this.getUsers();

            setInterval(() => {
                if (this.user.id) {
                    this.getMessage();
                }
            }, 3000);
        },
        computed: {

        },
        methods: {
            setUserActive(user) {
                this.user = user;
                this.messages = []
                this.getMessage();

            },
            getUsers() {
                new Promise((resolve, reject) => {
                    axios.get(base_url + '/messages/getUsersAjax').then((response) => {
                        this.users = response.data;
                        this.scrollHandler();
                        resolve(response.data);
                    }).catch((error) => {
                        reject(error);
                    });
                });
            },
            sendMessage() {
                console.log(this.message);
                if (!this.message) {
                    return false;
                }

                new Promise((resolve, reject) => {
                    axios.get(base_url + '/messages/sendMessageAjax/?to=' + this.user.id + "&message=" + this.message).then((response) => {
                        this.message = '';
                        console.log(response.data);
                        resolve(response.data);
                    }).catch((error) => {
                        reject(error);
                    });
                });
            },
            getMessage() {
                new Promise((resolve, reject) => {

                    let item_id = 0;
                    let last = 0;
                    let length = Object.keys(this.messages).length;

                    if (length) {
                        last = this.messages[length].id;
                    } else {
                        last = 0;
                    }


                    axios.get(base_url + '/messages/getMessageAjax/?to=' + this.user.id + "&await=" + true + "&last=" + last).then((response) => {

                        if (length > 0) {

                            // for (let index = 0; index < length; index++) {
                            //     this.messages.push(response.data[index]);
                            // }
                        } else {
                            this.messages.push(response.data[0]);
                        }

                        resolve(response.data);
                    }).catch((error) => {
                        reject(error);
                    });
                });

            },
            scrollHandler() {
                $(".messages").animate({
                    scrollTop: $(document).height()
                }, "fast");
            }
        },
    });

    // app.use(store);
    app.mount('#chat')
</script>