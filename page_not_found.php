<@ components/page.php @>

<@~ snippet main ~@>
<@ set { background: '404' } @>
<div class="page-title  <@ if @{ background } @>page-@{ background }<@ end @>">
        <div class="themeflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Erreur 404</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                      <ul>
                        <li>
                       <a href="/">Cette page est introuvable </a>
</li>
                      </ul>   
                    </div><!-- /.breadcrumbs -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
<@~ end ~@>
