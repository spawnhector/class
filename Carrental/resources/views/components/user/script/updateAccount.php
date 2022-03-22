<script>
    window.addEventListener('user-updated', event => {
        $(".myAlert-top").show();
        $('#alert-message').text(event.detail.info)
        setTimeout(function(){
            $(".myAlert-top").hide(); 
        }, 3000);
    })
</script>