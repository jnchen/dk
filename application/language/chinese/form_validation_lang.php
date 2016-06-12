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

$lang['form_validation_required']		= '字段 {field} 必须填写.';
$lang['form_validation_isset']			= '字段 {field} 必须要有一个值.';
$lang['form_validation_valid_email']		= '字段 {field} 必须包含一个有效的电子邮件地址.';
$lang['form_validation_valid_emails']		= '字段 {field} 所有的电子邮件地址必须有效.';
$lang['form_validation_valid_url']		= '字段 {field} 必须包含一个有效URL地址.';
$lang['form_validation_valid_ip']		= '字段 {field} 必须包含一个有效的IP地址.';
$lang['form_validation_min_length']		= '字段 {field} 的长度至少为 {param} 个字符.';
$lang['form_validation_max_length']		= '字段 {field} 的长度不能超过 {param} 个字符.';
$lang['form_validation_exact_length']		= '字段 {field} 的长度必须恰好为 {param} 个字符.';
$lang['form_validation_alpha']			= '字段 {field} 只能包含字母.';
$lang['form_validation_alpha_numeric']		= '字段 {field} 只能包含字母和数字.';
$lang['form_validation_alpha_numeric_spaces']	= '字段 {field} 只能包含字母、数字和空格.';
$lang['form_validation_alpha_dash']		= '字段 {field} 只能包含字母、数字、空格、下划线和连字符.';
$lang['form_validation_numeric']		= '字段 {field} 只能包含数字.';
$lang['form_validation_is_numeric']		= '字段 {field} 只能包含数字字符.';
$lang['form_validation_integer']		= '字段 {field} 只能包含整数.';
$lang['form_validation_regex_match']		= '字段 {field} 格式不正确.';
$lang['form_validation_matches']		= '字段 {field} 与 {param} 不相同.';
$lang['form_validation_differs']		= '字段 {field} 必须与 {param} 不相同.';
$lang['form_validation_is_unique'] 		= '字段 {field} 只能包含一个唯一值.';
$lang['form_validation_is_natural']		= '字段 {field} 只能包含自然数.';
$lang['form_validation_is_natural_no_zero']	= '字段 {field} 只能包含非零的自然数.';
$lang['form_validation_decimal']		= '字段 {field} 必须包含一个十进制数.';
$lang['form_validation_less_than']		= '字段 {field} 必须包含一个小于 {param} 的数字.';
$lang['form_validation_less_than_equal_to']	= '字段 {field} 必须包含一个小于或等于 {param} 的数字.';
$lang['form_validation_greater_than']		= '字段 {field} 必须包含一个大于 {param} 的数字.';
$lang['form_validation_greater_than_equal_to']	= '字段 {field} 必须包含一个大于或等于 {param} 的数字.';
$lang['form_validation_error_message_not_set']	= '无法访问对应于字段 {field} 的错误信息.';
$lang['form_validation_in_list']		= '字段 {field} 必须是集合中的一个: {param}.';
