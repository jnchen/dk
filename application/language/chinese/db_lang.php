<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = '根据您提交的连接字符串不能确定数据库的设置.';
$lang['db_unable_to_connect'] = '使用提供的设置不能连接到您的数据库服务器.';
$lang['db_unable_to_select'] = '不能查询指定的数据库: %s';
$lang['db_unable_to_create'] = '不能创建指定的数据库: %s';
$lang['db_invalid_query'] = '您提交的查询不正确.';
$lang['db_must_set_table'] = '您必须设置数据库表以供您的查询使用.';
$lang['db_must_use_set'] = '您必须要用set方法去更新一个记录.';
$lang['db_must_use_index'] = '您必须指定一个匹配的索引来进行批处理更新.';
$lang['db_batch_missing_index'] = '提交批量更新的一行或多行缺少指定索引.';
$lang['db_must_use_where'] = '不允许更新，除非它们包含一个“where”子句.';
$lang['db_del_must_use_where'] = '不允许删除，除非它们包含一个"where"或者"like"子句.';
$lang['db_field_param_missing'] = '获取字段需要提供表中name作为参数.';
$lang['db_unsupported_function'] = '该特性在您使用的数据库中不可用.';
$lang['db_transaction_failure'] = '事务失败: 回滚操作.';
$lang['db_unable_to_drop'] = '无法删除指定的数据库.';
$lang['db_unsupported_feature'] = '您正在使用数据库平台不支持的功能.';
$lang['db_unsupported_compression'] = '您的服务器不支持您选择的文件压缩格式.';
$lang['db_filepath_error'] = '无法向您提交的文件路径写入数据.';
$lang['db_invalid_cache_path'] = '您提交的缓存路径不存在或者不可写.';
$lang['db_table_name_required'] = '该操作需要指定数据表名.';
$lang['db_column_name_required'] = '该操作需要指定列名.';
$lang['db_column_definition_required'] = '该操作需要指定列定义.';
$lang['db_unable_to_set_charset'] = '不能将客户端连接字符集设置为: %s';
$lang['db_error_heading'] = '发生了一个数据库错误';
