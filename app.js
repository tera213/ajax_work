$(function(){

    $('.form').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type : 'post',
            url : 'ajax_json.php',
            dataType : 'json',
            data : {
                name : $('.js-get-val-name').val(),
                age : $('.js-get-val-age').val()
            }
        }).done(function(data, status){
            console.log(data);
            console.log(status);
            let name = data.name;
            let age = data.age;
            let text = '名前は' + data.name + 'で、年齢は' + data.age + 'です。'
            $('.text-area').html(text);
        });
    });
});