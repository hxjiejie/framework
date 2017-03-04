# framework
framework for php develop

##Nginx config:

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