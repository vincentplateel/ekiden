<# 

This is a reusable snippet for rendering the main content of a page.

#>

<# 

We can wrap the entire title section and assign the "am-block" class in order
to nicely integrate the content with the content that is provided 
by the "+main" block editor field below.

#>

<div class="page-title">
    <div class="themeflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">@{ title }</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                  <@ breadcrumbs { options } @>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><i class="icon-Arrow---Right-2"></i></li>
                        <li><a>Our Events</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>



