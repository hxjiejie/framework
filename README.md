# Framework
framework for php develop

##Nginx配置:

```nginx
server {
    listen 80;
    server_name  framework.cn;
    charset utf-8;
    root   /Users/hj/code/framework;
    index  index.html index.htm index.php;
    access_log  /var/log/nginx/framework.cn-access.log;
    error_log   /var/log/nginx/framework.cn-error.log;

    location / {
        if (!-e $request_filename) {
                rewrite ^.*$ /index.php last;
                break;
        }
    }

    location ~ \.(js|css|gif|jpg|jpeg|png|map|mp4|mp3|eot|svg|tiff|woff|woff2|ttf|ico|json)$ {
	    rewrite ^(.*)$ /public/$1 break;
    }

    location ~ \.php$ {
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
    }
}
```

###路由：
```php
// 基础路由
Route::get('/', function() {
    echo 'Welcome to framework.';
});

// 路由分配控制器与方法
Route::get('/test', 'TestController@index');

// 可以使用命名空间来区分项目目录
Route::get('/event/index', 'Event\TestController@index');
```