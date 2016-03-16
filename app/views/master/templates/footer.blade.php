<div class="clearfix"></div>
</div> <!-- /.content -->
</div> <!-- /.page -->
<footer class="footer">
    <div class="footer-contain">
        <p>Copyright &copy; {{date("Y")}} Four Green Fields Farm. All Rights Reserved.</p>
        <p>Designated trademarks and brands are the property of their respective owners.</p>
        <p>Website and graphics are created by Matt Crandell of <a href="http://www.crandelldesign.com">Crandell Design</a>.</p>
        <p>
        	<a href="{{url('/')}}/events/admin">Admin Access</a>
        	@if(Auth::check())
        	| <a href="{{url('/')}}/events/admin/logout">Logout</a>
        	@endif
        </p>
    </div>
</footer>