//引入gulp文件

var gulp =require("gulp");


//引入第三方文件
var less=require("gulp-less");
var sass=require("gulp-sass");
var path=require("path");
var rename=require("gulp-rename");
var uglify=require("gulp-uglify");
var cleanCss=require("gulp-clean-css");


//配置less编译任务
gulp.task("lessTask",function(){
	gulp.src("src/less/*.less")
	
	.pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
	.pipe(gulp.dest("dist/css"));
})

//配置sass编译任务
//gulp.task("sassTask",function(){
//	gulp.src("src/sass/*.scss")
//	
//	.pipe(sass().on('error', sass.logError))
//	.pipe(gulp.dest("dist/css"));
//})

//配置压缩css的任务
//gulp.task("minCssTask",function () {
//	gulp.src("dist/css/*.css") //源目录
//	.pipe(cleanCSS({compatibility: 'ie8'}))
//	.pipe(rename({
//		suffix:".min" //重命名加min后缀
//	}))
//	.pipe(gulp.dest("dist/css/min")); //输出目录
//});

//配置js压缩的任务
//gulp.task("minJsTask",function () {
//	gulp.src("src/javascripts/*.js") //源目录
//	.pipe(uglify()) //执行压缩
//	.pipe(rename({
//		suffix: ".min"   //执行重命名
//  })) 
//	.pipe(gulp.dest("dist/js/min")); //输出目录
//});

//开启观察者watch
gulp.task("default",function () {
	gulp.watch("src/less/*.less",["lessTask"]); //观察less变化执行less编译任务
//	gulp.watch("src/sass/*.scss",["sassTask"]); //观察sass变化执行sass编译任务
//	gulp.watch("dist/css/*.css",["minCssTask"]); //观察css变化执行css压缩任务
//	gulp.watch("src/javascripts/*.js",["minJsTask"]); //观察js变化执行js压缩任务
});