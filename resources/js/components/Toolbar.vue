<template>
    <v-card
        color="grey lighten-4"
        flat
        height="200px"
        tile
    >
        <v-toolbar bottom>

            <v-toolbar-title>Forum <sup>Dev.</sup></v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items >
                <v-btn flat>Forum</v-btn>
                <v-btn flat>Ask Question</v-btn>
                <v-btn flat>Category</v-btn>
                <v-btn flat>Login</v-btn>
            </v-toolbar-items>
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
