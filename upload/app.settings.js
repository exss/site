/**
 * GlobalQuran application settings 
 * @author Basit (i@basit.me || http://Basit.me)
 * 
 * Online Quran Project
 * http://GlobalQuran.com/
 *
 * Copyright 2011, imegah.com
 * Simple Public License (Simple-2.0)
 * http://www.opensource.org/licenses/Simple-2.0
 * 
 */

gq.config2 = {
		
		/**
		 * set to true if you want to use Quran for offline, make sure you download all the Quran data and all.json file.
		 */
		offline: false,
		
		/**
		 * apiURL data api url
		 */
		apiURL: 'http://api.globalquran.im/',
		
		/**
		 *  false;      - will not get any data, useful for displaying audio player only
		 *  'page';     - Get Quran page by page.
		 *  'surah';    - Get Quran surah by surah.
		 *  'juz';      - Get Quran juz by juz.
		 */
		data: 'page',
		
		/**
		 * will start caching next surah, juz or cache complete Quran, so it loads quickly. 
		 */
		dataPreCache: true,
						
		/**
		 * googleAnalyticsID google analytics id for counting visitors on the site and the event they do
		 */
		googleAnalyticsID: ''
		
		// keyword, url - change/format, player... other config				
	};


// starting the application
layout.init();