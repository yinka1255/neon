<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function getSuccess(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    typeAnimated: true,
                    buttons: {
                        'Keep shopping': function () {
                            text: 'Continue shopping'
                            
                        },
                        'Complete order': function () {
                            window.location.href = "{{url('cart')}}";
                        },
                    }
                });
        }

        function getSuccess1(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    typeAnimated: true,
                    
                });
        }
        function getSuccess2(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    typeAnimated: true,
                    
                });
        }
    function getError(data){
            $.confirm({
                    title: 'Error!',
                    content: data,
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                            Ok: function () {
                            }
                    }
            });
        }
    </script>
    
    @if(Session::has('error'))
    <script>
        getError("{{Session::get('error')}}");
    </script>
    @endif	
    @if(Session::has('success'))
    <script>
        getSuccess("{{Session::get('success')}}");
    </script>
    @endif	
    @if(Session::has('success1'))
    <script>
        getSuccess1("{{Session::get('success1')}}");
    </script>
    @endif	
    @if(Session::has('success2'))
    <script>
        getSuccess2("{{Session::get('success2')}}");
    </script>
    @endif	

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c8931aec37db86fcfcd98c1/1diogce88';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
    <!--End of Tawk.to Script-->