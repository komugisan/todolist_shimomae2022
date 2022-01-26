<template>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};

var app = new Vue({
    el: "#todolist",
    data: {
        counter: 0,
    },
    //メソッドイベントハンドラ
    methods: {
        deleteTodo: function (e) {
            let deleteId = e.currentTarget.getAttribute("data-delete-id");
                    axios.post('/api/del',{
                        id: deleteId
                        })
                .then((response) => {
                    console.log("成功！");
                    location.reload();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
});
</script>
