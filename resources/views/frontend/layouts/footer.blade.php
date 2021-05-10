<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="companyinfo">
                        <h2>{{$setting->company}}</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Mã số thuế</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">{{$setting->tax}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Hotline</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">{{$setting->hotline}}</a></li>
                            <li><a href="#">{{$setting->phone}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Địa Chỉ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">{{$setting->address}}</a></li>
                            <li><a href="#">{{$setting->address2}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->
