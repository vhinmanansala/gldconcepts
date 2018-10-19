<div class="grid-container">
    <div id="footer-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12 large-12 text-center">
                <h4>GLD CONCEPTS</h4>

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
                                 @elseif ($social_media == 'instagram')
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>

                <p>Copyright &copy {{ date('Y') }} All rights reserved</p>

                <div class="footer-content-container">
                    <span>Designed and developed by <a href="http://aomanansala.com/">aomanansala</a></span>
                </div>
            </div>
        </div>
    </div>
</div>