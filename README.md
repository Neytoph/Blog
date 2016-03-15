# Blog

### 基于[CI](http://codeigniter.org.cn)和[bootstrap](http://www.bootcss.com/)的个人博客系统
##[DEMO](http://www.neytoph.com/Blog/)

#### 预览:
![](https://ooo.0o0.ooo/2016/03/15/56e824595ce3e.png)
###"I need a designer!"
----

###使用方法：

1. 打开**`application/config/config.php`**设置网页根目录

  ```php
  $config['base_url'] = 'http://your_url/blog/';
  ```
2. 打开**`application/config/config.php`**配置数据库

  ```php
  'hostname' => 'your_hostname',
  'username' => 'your_username',
  'password' => 'your_password',
  'database' => 'your_database_name',
  ```
  
3. 数据表导入

  ```php
  导入文件/blog.sql
  ```  
  
4. 修改密码

  ```php
  默认用户名：root
  默认密码：root
  ```
  
### 目前的主要功能和亮点：

- [x] 1. 基本的文章编辑功能
- [x] 2. markdown语法支持
- [x] 3. 标签云
- [x] 4. 访客统计
- [x] 5. 备份文章功能
- [x] 6. 评论系统（暂定多说）
- [ ] 7. 访客地图
- [x] 8. 全文搜索功能

###欢迎大家指出不足~
