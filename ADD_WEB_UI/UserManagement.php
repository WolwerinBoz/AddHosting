<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="jqwidgets/styles/jqx.base.css" rel="stylesheet" type="text/css"/>
        <link href="jqwidgets/styles/jqx.metrodark.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxcore.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxdata.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxbuttons.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxscrollbar.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxlistbox.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxdropdownlist.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxmenu.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.pager.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.sort.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.filter.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxcheckbox.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.selection.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxgrid.columnsresize.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxpanel.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            var data = [];
            jQuery.ajax({
            type: "POST",
            url: 'User.php?method=LoadUserDataToGrid',
            dataType: 'json'
            success: function (_data) {
                    data = _data;
                    alert(data + "kjnkj");
                    }
            });
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'UserId', type: 'string' },
                    { name: 'UserName', type: 'string' },
                    { name: 'UserRoleId', type: 'string' },
                    { name: 'UserRole', type: 'string' },
                    { name: 'Password', type: 'string' },                    
                    { name: 'Name', type: 'string' },
                    { name: 'Email', type: 'string' }
                ],
                localdata: data
            };
            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
            {
                width: 1600,
                source: dataAdapter,
                theme:"metrodark",
                sortable: true,
                filterable: true,
                columnsresize: true,
                autoshowfiltericon: false,
                columns: [
                  { text: 'UserId', datafield: 'UserId', width: 150, hidden:true },
                  { text: 'UserName', datafield: 'UserName', width: 150 },
                  { text: 'User Role Id', datafield: 'UserRoleId', width: 150,hidden:true  },
                  { text: 'User Role', datafield: 'UserRole', width: 150 },
                  { text: 'Password', datafield: 'Password', width: 200,hidden:true },
                  { text: 'Name', datafield: 'Name', width: 280},
                  { text: 'Email', datafield: 'Email', width: 270 }
                ]
            });
        });
    </script>

    </head>
    <body>
        <?php
        // put your code here
        ?>
        <Div class="container">
            <div class="btn-group col-lg-1"style="float: right;">
                <button class="btn btn-primary">New</button>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12"  id='jqxWidget'>
                    <div style="margin-left: 20px; float: left;" id="jqxgrid"></div>
                </div>
            </div>
        </Div>
    </body>
</html>
