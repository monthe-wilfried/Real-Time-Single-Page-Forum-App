<template>
    <v-container>
        <v-form @submit.prevent="login">

            <v-text-field
                v-model="form.email"
                label="E-mail"
                type="email"
                required
            ></v-text-field>

            <v-text-field
                v-model="form.password"
                label="Password"
                type="password"
                required
            ></v-text-field>

            <v-btn
                color="green"
                class="mr-4"
                type="submit"
            >
                Login
            </v-btn>

            <router-link to="/signup">
                <v-btn
                    color="blue"
                    class="mr-4"
                    type="submit"
                >
                    Signup
                </v-btn>
            </router-link>

        </v-form>
    </v-container>
</template>

<script>
    import User from "../../helpers/User";

    export default {
        data(){
            return {
                form:{
                    email:null,
                    password:null
                }
            }
        },
        created() {
            if (User.loggedIn()){
                this.$router.push('forum')
            }
        },
        methods:{
            login(){
                User.login(this.form)
            }
        }
    }
</script>

<style scoped>

</style>
