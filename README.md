# Blog

> ### 基于[CI](http://codeigniter.org.cn)和[bootstrap](http://www.bootcss.com/)的个人博客系统~由neytoph完成

###
使用方法：

1. 打开**`application/config/config.php`**设置网页根目录

  ```php
  $config['base_url'] = 'http://localhost/blog/';
  ```
2. 打开**`application/config/config.php`**配置数据库

  ```php
  'hostname' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'blog',
  ```

  
### 目前的主要功能：

- [x] 1. 基本的文章编辑功能
- [x] 2. markdown语法支持
- [x] 3. 标签云
- [x] 4. 访客统计
- [ ] 5. 备份及上传文章功能
- [ ] 6. 评论系统（暂定多说）
- [ ] 7. 访客地图
- [ ] 8. 全文搜索

###欢迎大家指出不足~

> ###备忘：
#### ~~1. 标签关系管理：删除标签与文章的对应关系~~
#### 2. 新建文章时的表单验证
#### ~~3. 删除标签及分类时，检测其下是否有相关文章，还有文章不能删除~~
