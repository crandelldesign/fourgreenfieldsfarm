<footer class="footer">
    <div class="container-fluid">
        <p>Copyright &copy; {{date('Y')}} Four Green Fields Farm. All Rights Reserved.</p>
        <p>Designated trademarks and brands are the property of their respective owners.</p>
        <p>All graphics are created by Matt Crandell of <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.</p>
    </div>
</footer>

<div class="modal fade" tabindex="-1" role="dialog" id="img-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script id="img-modal-template" type="text/x-handlebars-template">
    @{{#if caption}}
    <p class="caption">@{{caption}}</p>
    @{{/if}}
    <div class="image"><img src="@{{src}}" alt="@{{caption}}" class="img-responsive center-block"></div>
</script>