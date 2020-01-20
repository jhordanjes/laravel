<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">AGENDA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" v-for="menu in menus" :key="menu.nome">
                        <a class="nav-link" :href="menu.link">{{menu.nome}}</a>
                    </li>
                </ul>

            </div>
        </nav>
</template>

<script>
    export default {
        props: ['menus'],
    }
</script>
