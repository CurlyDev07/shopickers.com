
    <footer>
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ asset('js/materialize.min.js') }}"  crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                $(".dropdown-trigger").dropdown({
                    hover: true,
                });
                $('.tabs').tabs();
            });
        </script>

        @yield('js')
    </footer>
</body>
</html>