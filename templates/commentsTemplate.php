<div class="container-fluid">
    <div class="comments">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h1>Your feedback's</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    <?
                    $comment = new Base();
                    $comment->selectComments();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

