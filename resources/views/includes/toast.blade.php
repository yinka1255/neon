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