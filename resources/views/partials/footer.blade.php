<div class="grid-container">
    <div id="footer-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12 large-6">
                <h4>GLD CONCEPTS</h4>
                <p>Copyright &copy {{ date('Y') }} All rights reserved</p>
            </div>

            <div class="cell medium-12 large-6 text-right">
                <div class="footer-content-container">
                    <ul class="social-media clearfix">
                        @foreach ($social_medias as $social_media => $url)
                            <li>
                                <a href="{{ $url }}">
                                    @if ($social_media == 'facebook')
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    @elseif ($social_media == 'pinterest')
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    @elseif ($social_media == 'twitter')
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <span>Designed and developed by <a href="http://aomanansala.com/">aomanansala</a></span>
                </div>
            </div>
        </div>
    </div>
</div>