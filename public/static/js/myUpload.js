/**
 * Created by john on 2018/4/6.
 */

//（1）图片点击上传
// $("#portrait").on('change',function(){
//     setImagePreview();
// });


function setImagePreview(input_file_ele_id,preview_ele_id) {
    var docObj = document.getElementById(input_file_ele_id);
    // //img
    var imgObjPreview = document.getElementById(preview_ele_id);
    //div
    // var divs = document.getElementById("localImag");

    var $tip='';
    var $flag=true;
    if(!docObj.value){
        $(imgObjPreview).attr('src',preview_src);
        return false
    }
    if(parseInt(docObj.files[0].size)/1024 > 500){
        $tip+='您上传的图片不能大于500k\n';
        $flag= false;
    }
    if(!/image\/\w+/.test(docObj.files[0].type)){
        $tip+='上传的不是图片';
        $flag= false;
    }
    if(!$flag){
        $(imgObjPreview).attr('src',preview_src);
        alert($tip);
        return $flag;
    }

    if (docObj.files && docObj.files[0]) {
        //火狐下，直接设img属性
        imgObjPreview.style.display = 'block';
        imgObjPreview.style.width = '100%';
        imgObjPreview.style.height = '100%';
        //imgObjPreview.src = docObj.files[0].getAsDataURL();
        //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
        imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
    } else {
        //IE下，使用滤镜
        docObj.select();
        var imgSrc = document.selection.createRange().text;
        var localImagId = document.getElementById("localImag");
        //必须设置初始大小
        localImagId.style.width = "100%";
        localImagId.style.height = "100%";
        //图片异常的捕捉，防止用户修改后缀来伪造图片
        try {
            localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)"
            localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
        } catch(e) {
            alert("您上传的图片格式不正确，请重新选择!");
            return false;
        }
        imgObjPreview.style.display = 'none';
        document.selection.empty();
    }
    return true;
}

//（2）图片拖拽上传
/*思路：
 *1.熟悉文件拖拽 目标元素 的四个事件,注意:ondragover、ondrop事件中阻止默认行为
 *2.拖拽放置后，获取到文件对象集合：e.dataTransfer.files
 *3.循环该集合中的每个文件对象，判断文件类型以及文件大小，是指定类型则进行相应的操作
 *4.读取文件信息对象：new FileReader()，它有读取文件对象为DataUrl等方法：readAsDataURL(文件对象)、读取成功之后触发的事件：onload事件等，this.result为读取到的数据
 *5.在FileReader对象中的几个事件中进行相应的逻辑处理
 *
 */
function dropFileUpload(oDiv,oP,portrait,e){

// //必须将jq对象转换为js对象，调用原生方法
//     var oDiv = $("#localImag").get(0);
//     var oP = $("#preview").get(0);
//
// //进入
//     oDiv.ondragenter = function() {
//         if(oP.src===false)
//             oP.html='';
//     }
// //移动，需要阻止默认行为，否则直接在本页面中显示文件
//     oDiv.ondragover = function(e) {
//
//         e.preventDefault();
//     }
// //离开
//     oDiv.onleave = function() {
//         if(oP.src===false)
//             oP.html('请将图片文件拖拽至此区域！');
//     }
// //拖拽放置，也需要阻止默认行为
//     oDiv.ondrop = function(e) {

        if(window.event)
            e.returnValue = false
        else
            e.preventDefault()
        //获取拖拽过来的对象,文件对象集合
        var fs = e.dataTransfer.files;
    
        if(!fs)
            fs=portrait.files[0];
        //若为表单域中的file标签选中的文件，则使用form[表单name].files[0]来获取文件对象集合
        //打印长度
        // console.log(fs.length);
        if(fs.length>1){
            alert('只能上传单个文件');
            return false
        }
        //循环多文件拖拽上传
        for (var i = 0; i < fs.length; i++) {
            //文件类型
            var _type = fs[i].type;

            // console.log(_type);
            //判断文件类型
            if (_type.indexOf('image') != -1) {
                //文件大小控制
                // console.log(fs[i].size);
                //读取文件对象
                var reader = new FileReader();
                //读为DataUrl,无返回值
                reader.readAsDataURL(fs[i]);
                reader.onloadstart = function(e) {
                    //开始加载
                }
                // 这个事件在读取进行中定时触发
                reader.onprogress = function(e) {

                    $("#total").html(e.total);
                }

                //当读取成功时触发，this.result为读取的文件数据
                reader.onload = function() {
                    //文件数据
                    // console.log(this.result);
                    //添加文件预览
                    if(oP.src!==false)
                        oP.src=this.result
                    else{
                        var oImg = $("<img style='width:100px;' src='' />");
                        oImg.attr("src", this.result);
                        $(oDiv).append(oImg); //oDiv转换为js对象调用方法
                    }
                }
                //无论成功与否都会触发
                reader.onloadend = function() {
                    if (reader.error) {
                        console.log(reader.error);
                    } else {
                        //上传没有错误，ajax发送文件，上传二进制文件
                    }
                }
            } else {
                alert('请上传图片文件！');
            }
        }

    // }
}
function getEvent(event){
    return event || window.event;
}