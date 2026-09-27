<?php
/** 
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM. 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'İnternet Botlarını Yönet',
	'BOTS_EXPLAIN'		=> '“Botlar”, “örümcekler” ya da “tarayıcılar” arama motorları tarafından kullanılan otomatikleştirilmiş ajan programlarıdır. Bu bot programlar kendi veritabanlarını güncellemek için bot programlar kullanırlar. Oturumlarda kullanılmaya başladıklarından beri İnternet Botları bazı bozulmalara neden olabilmektedir, ziyaretçi sayacının değişmesine neden olmakta, yükü artırmakta ve bazen mesaj panosunu indekslemede hata yapabilmektedirler. Bu bölümde bu tarz problemlerin üstesinden gelebilmek için bu özel yapıya sahip kullanıcıları tanımlayacağız.',
	'BOT_ACTIVATE'		=> 'Aktif Et',
	'BOT_ACTIVE'		=> 'Bot Aktif',
	'BOT_ADD'			=> 'Bot Ekle',
	'BOT_ADDED'			=> 'Yeni Bot başarıyla eklendi',
	'BOT_AGENT'			=> 'Ajan eşleşme',
	'BOT_AGENT_EXPLAIN'	=> 'Botlar, tarayıcı ajanları özel bir koşulla eşleştirilir, kısmi eşleşmelere izin verilir.',
	'BOT_DEACTIVATE'	=> 'Aktifliği Kaldır',
	'BOT_DELETED'		=> 'Bot başarıyla silindi',
	'BOT_EDIT'			=> 'Botları Düzenle',
	'BOT_EDIT_EXPLAIN'	=> 'Bu bölümde, yeni botlar ekleyebilir, var olan bot bilgilerini güncelleyebilirsiniz. Eşleşme için ajan koşulu veya bir ya da birden fazla IP adresleri(belirli bir aralığa sahip adreslerde olabilir) tanımlayabilirsiniz. Ajan koşullarını veya adresleri düzenlerken dikkatli olmalısınız. Mesaj panosunun kullanımında botları dilini ve stilini buradan değiştirebilirsiniz. Botlar için basit stiller ayarlanması ile botların bandwith kullanımını azaltmasına katkıda bulunabilirsiniz. Özel kullanıcı botları için doğru izinleri ayarlamayı unutmayınız.',
	'BOT_GROUP'			=> 'Bot grubu',
	'BOT_GROUP_EXPLAIN'	=> 'Bu botun ait olduğu grubu seçin.',	
	'BOT_LANG'			=> 'Bot Dili',
	'BOT_LANG_EXPLAIN'	=> 'Botlar mesaj panonuz üzerinde dolaşırken, botlara sağlanan dil seçeneği',
	'BOT_LAST_VISIT'	=> 'Son Ziyaret',
	'BOT_IP'			=> 'Bot IP Adresi',
	'BOT_IP_EXPLAIN'	=> 'Kısmi eşleşmelere izin verilmiştir, adresleri ayırarak yazmak için virgül kullanılabilir.',
	'BOT_NAME'			=> 'Bot Adı',
	'BOT_NAME_EXPLAIN'	=> 'Sadece sizin kendi bilgileriniz için kullanılır.',
	'BOT_NAME_TAKEN'   => 'Bu ad zaten mesaj panonuzda kullanılıyor ve bot için kullanılamaz.',
	'BOT_NEVER'			=> 'Asla',
	'BOT_STYLE'			=> 'Bot Stili',
	'BOT_STYLE_EXPLAIN'	=> 'Botun mesaj panosunda kullanacağı temayı seçin.',
	'BOT_UPDATED'		=> 'Varolan bot başarıyla güncellendi',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Belirttiğiniz bot ajanı şu anda kullanılan ajanlardan birisine benziyor. Lütfen bu bot için ajan ayarlayın.',
	'ERR_BOT_NO_IP'			=> 'Girmiş olduğunuz IP adresi geçersiz ya da sunucu çözülemedi.',
	'ERR_BOT_NO_MATCHES'	=> 'Bot Eşleşmesi için en azından bir ajanı ya da IP adresini belirtmelisiniz.',
	'ERR_BOT_NO_NAME'			=> 'Bir bot adı belirtmelisiniz.',	

	'NO_BOT'	=> 'Belirtilen ID de herhangi bir Bot bulunamadı',
	'NO_BOT_GROUP'	=> 'Özel bot grubu bulunamıyor.',
));
