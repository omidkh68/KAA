<div id="lightBox" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<footer>
    <div class="lang-selector pull-left">
        <ul>
            <li class="pull-left wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <a href="#" class="change_lang<?php echo (LANG == "en") ? ' active' : '' ?>" data-lang="en"
                   data-toggle="tooltip" data-placement="right" title="Change Language to English">
                    <img src="<?php echo DOMAIN_URL; ?>assets/images/flag-en.png" class="center-block"
                         alt="Change Language to English">
                </a>
            </li>
            <li class="pull-left wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                <a href="#" class="change_lang<?php echo (LANG == "fa") ? ' active' : '' ?>" data-lang="fa"
                   data-toggle="tooltip" data-placement="right" title="تغییر زبان به پارسی">
                    <img src="<?php echo DOMAIN_URL; ?>assets/images/flag-fa.png" class="center-block"
                         alt="تغییر زبان به پارسی">
                </a>
            </li>
        </ul>
    </div>

    <p class="pull-right <?php echo (LANG == "fa") ? "rtl" : "ltr" ?> wow fadeInUp" data-wow-duration="1s"
       data-wow-delay=".8s">
        &copy; <span class="current-year <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><?php echo date("Y"); ?></span>
        <span data-word="copy"><?php echo COPY; ?></span>
    </p>
</footer><!-- /Footer of Site -->
