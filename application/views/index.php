<div class="container">


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="page-header"><a href="<?php echo SITE_URL; ?>">
                <img id="logo"
                     src="<?php echo SITE_URL; ?>application/views/img/logo.png"
                     alt="Whitesquare logo">
            </a></h4>
    </div>


    <div class="content">

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <textarea class="form-control" rows="20" id="leftText"></textarea>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="input-group  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span class="input-group-addon" id="basic-addon1">ROT</span>
                <input type="text" class="form-control"
                       placeholder="Please enter..."
                       aria-describedby="basic-addon1" id="rot">
            </div>
            <div class="row">
                <div id="buttonControl">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default"
                                id="leftButton">
                            <span aria-hidden="true">Encode</span>
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default"
                                id="rightButton">
                            <span aria-hidden="true">Decode</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <textarea class="form-control" rows="20" id="rightText"></textarea>
        </div>


    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="panel panel-default" id="diagrammaPanel">
            <div class="panel-heading">Diagramma</div>
            <div class="panel-body" id="diagramma">

            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div id="infoPanel">

        </div>
    </div>


