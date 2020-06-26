baseUrl: '/clients/cadastrar';

$('#cadastro').click(() => {




    e.preventDefault();



    var name = $("input[name=name]").val();

    var lastname = $("input[name=lastname]").val();

    var address = $("input[name=address]").val();



    $.ajax({

        type: 'POST',

        url: '/ajaxRequest',

        data: { name: name, lastname: lastname, address: address },

        success: function (data) {

            alert(data.success);

        }





    });
})
