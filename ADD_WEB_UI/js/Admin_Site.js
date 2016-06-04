/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function OpenDashBoard(){
        alert("Load dashboard to iFrame in container");
}
function OpenCategeory(){
        alert("Load Categeory to iFrame in container");
}
function OpenUserManagement(){
    window.frames['adminFrame'].location.replace("UserManagement.php");
}