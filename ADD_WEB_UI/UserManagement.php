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
            var url = "../ADD_WEB_BL/User.php/LoadUserDataToGrid";

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
                id: 'id',
                url: url
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
        <div style="margin: 8% 15% 0% 5%;" id='jqxWidget'>
        <div style="margin-left: 20px; float: left;" id="jqxgrid"></div>
    </div>

    </body>
</html>
