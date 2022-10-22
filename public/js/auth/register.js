$('.cep').mask('00000-000');
$(document).on('blur', '#cep', function() {
    const cep = $(this).val();

    $.ajax({
        url: 'https://viacep.com.br/ws/'+cep+'/json/',
        method: 'GET',
        dataType: 'json',
        success: function(data){
            if(data.erro){
                alert('Endereço não encontrado');
            }
            $('#city').val(data.localidade);
            $('#street').val(data.logradouro);
            $('#district').val(data.bairro);
        }
    });
});