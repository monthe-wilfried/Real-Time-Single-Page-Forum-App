<template>
    <v-card
        color="grey lighten-4"
        flat
        tile
    >
        <v-toolbar bottom>

            <v-toolbar-title>Forum <sup>Dev.</sup></v-toolbar-title>
            <v-spacer></v-spacer>
            <div>
                <v-btn text>Forum</v-btn>
                <v-btn text>Ask Question</v-btn>
                <v-btn text>Category</v-btn>
                <router-link to="/login">
                    <v-btn text>Login</v-btn>
                </router-link>
            </div>
        </v-toolbar>
    </v-card>
</template>

<script>
    export default {
        name: "Toolbar"
    }
</script>

<style scoped>

</style>
