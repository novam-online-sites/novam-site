(function($){

    $(document).ready(function(){
        $('[type="url"]', document).on('blur change', function(){
            if(!this.value.startsWith('http')){
                this.value = 'http://' + this.value;
            }
        })
    });

})(jQuery);
