<# 

This is a reusable snippet for rendering the main content of a page.

#>

<# 

We can wrap the entire title section and assign the "am-block" class in order
to nicely integrate the content with the content that is provided 
by the "+main" block editor field below.

#>

<div class="page-title  <@ if @{ background } @>page-@{ background }<@ end @>">
    <div class="themeflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">@{ title }</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                  <@ newPagelist {
                      type: 'breadcrumbs',
                      excludeCurrent: false,
                      excludeHidden: false,
                    } @>
                    <ul>
                      <@ foreach in pagelist @>
                        <@ if @{ :i } > 1 @>
                          <li><i class="icon-Arrow---Right-2"></i></li>
                        <@ end @>
                        <li><a href="@{ url }">@{ title }</a></li>
                      <@ end @>
                  </ul>	
                  <@ end @>
                </div><!-- /.breadcrumbs -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

