<template>
    <div class="lista">

        

        <table border="1">
            <tr>
                <th>sender</th>
                <th>address</th>
                <th>text</th>
                <th>image</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{postcard.sender}}</td>
                <td>{{postcard.address}}</td>
                <td>{{postcard.text}}</td>
                <td>
                    <img v-if="postcard.image" :src="'/storage/postcards/' + postcard.image" width="100px">
                    <p v-else>image</p>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
       data: function(){
            return{
                postcards: []
            };
        },

        mounted() {
            
            axios.get('/api/postcards/list')
                .then(r => this.postcards = r.data)
                .catch(e => console.error(e));
        },
    }
</script>