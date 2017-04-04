<?php
	/*	TAGU DESPRE CARE VORBEAM: CLOSED
		Text original in romana 
			C. Alexandru Sorin
				Start date: 3/24/2017 / beta
				Latest date: 3/26/2017 9:55 // login // v1.1
				Latest date: 3/27/2017 10:13 // client area details // v1.2
				Latest date: 3/30/2017 v1.3 start 
				// client area change pw - 2:20 PM
				// login - 4:40PM
				// client area emails - 5:23 PM
				// cart - 6:50 PM
				// v1.3 v1.3 end
				// NEWNEWNEWNEW !!!! v1.4 -> INVOICES!!!! check invoices_ with ctrl+F  / H 12:19
										*/
				// v1.4 NEW -> invoices partea 2
				// v1.4 My services
				// v4.4 My Domains
				// v1.4 Tickets
				
	$lang = array();

	// Header //
	$lang['header_notifications'] = 'Notificări';
	$lang['header_no_notifications'] = 'Nu ai nicio notificare.';
	$lang['header_view_cart'] = 'Cosul meu';
	$lang['header_login'] = 'Autentificare';
	$lang['header_forgot_password'] = 'Ai uitat parola ?';
	$lang['header_not_yet_registered'] = 'Nu v-ați înregistrat încă?';
	$lang['header_click_here_to_signup'] = 'Click aici...';
	
	// Menu //
	$lang['menu_home'] = 'Prima pagina';
	$lang['menu_domain_names'] = 'Domenii';
	$lang['menu_web_hosting'] = 'Gazduire Web';
	$lang['menu_vps_ssd'] = 'VPS SSD';
	$lang['menu_teamspeak3'] = 'TeamSpeak 3';
	$lang['menu_dedicated_servers'] = 'Servere dedicate';
	$lang['menu_licenses'] = 'Licente';
	
	// menu before loggin //
	$lang['menu_account'] = 'Contul meu';
	$lang['menu_login'] = 'Autentificare';
	$lang['menu_register'] = 'Inregistrare';
	$lang['menu_forgot_password'] = 'Ai uitat parola?';
	$lang['menu_login_email_address'] = 'Adresa de email';
	$lang['menu_login_password'] = 'Parola';
	
	// menu after loggin //
	$lang['menu_hello'] = 'Bun venit,';
	$lang['menu_client_area'] = 'Contul meu';
	$lang['menu_my_services'] = 'Serviciile mele';
	$lang['menu_my_domains'] = 'Domeniile mele';
	$lang['menu_my_invoices'] = 'Facturile mele';
	$lang['menu_my_tickets'] = 'Tichetele mele';
	$lang['menu_email_history'] = 'Istoric email-uri';
	$lang['menu_edit_account_detail'] = 'Modifica setarile contului';
	$lang['menu_change_password'] = 'Modifica parola';
	$lang['menu_logout'] = 'Deconectare';

	// index //
	$lang['index_search_domain'] = 'Începeți căutarea domeniului perfect ...';
	$lang['index_help_today'] = 'Cum vă putem ajuta azi?';
	$lang['index_buy_domain'] = 'Cumpără un domeniu';
	$lang['index_buy_ts3'] = 'Cumpără server ts3';
	$lang['index_make_payment'] = 'Plateste facturi';
	$lang['index_get_support'] = 'Ajutor';
	$lang['index_news'] = 'Noutați';
	
	// clientarea //
	$lang['clientarea_welcome_back'] = 'Bun venit inapoi,';
	$lang['clientarea_portal_home'] = 'Portalul clienților';
	$lang['clientarea_client_area'] = 'Contul meu';
	$lang['clientarea_your_infos'] = 'Informatiile tale';
	$lang['clientarea_update'] = 'Actualizeaza';
	$lang['clientarea_services'] = 'Servicii';
	$lang['clientarea_domains'] = 'Domenii';
	$lang['clientarea_tickets'] = 'Tichete';
	$lang['clientarea_invoices'] = 'Facturi';
	$lang['clientarea_logout'] = 'Deconectare';
	$lang['clientarea_shortcuts'] = 'Scurtaturi';
	
	// login // 3.26.2017 9:55
	$lang['login_login'] = 'Autentificare';
	$lang['login_page_restricted'] = 'Accesul la această pagină este restricționat';
	$lang['login_email_address'] = 'Adresa e-mail';
	$lang['login_enter_address'] = 'Introduceți adresa e-mail';
	$lang['login_password'] = 'Parola';
	$lang['login_enter_password'] = 'Parola';
	$lang['login_remember_me'] = 'nu mă uita';
	$lang['login_forgot_password'] = 'Ai uitat parola?';
	// update 3/30/2017 4:40PM
	$lang['login_incorrect'] = 'Detalii de acces incorecte. Vă rugăm să încercați din nou.';

	
	// Client area Details // 3.27.2017 10:13
	$lang['clientarea_details_my_details'] = 'Detaliile mele';
	$lang['clientarea_details_portal_home'] = 'Portalul clienților';
	$lang['clientarea_details_client_area'] = 'Contul meu';
	$lang['clientarea_details_my_account'] = 'Contul meu';
	$lang['clientarea_details_change_password'] = 'Modificare parolă';
	$lang['clientarea_details_email_history'] = 'Istoric mesaje';
	$lang['clientarea_details_changes_saved_successfully'] = 'Modificările au fost salvate cu succes!';
	$lang['clientarea_details_first_name'] = 'Prenumele';
	$lang['clientarea_details_last_name'] = 'Numele de familie';
	$lang['clientarea_details_company_name'] = 'Numele companiei';
	$lang['clientarea_details_email_address'] = 'Adresa e-mail';
	$lang['clientarea_details_address_1'] = 'Adresa 1';
	$lang['clientarea_details_address_2'] = 'Adresa 2';
	$lang['clientarea_details_city'] = 'Oraș';
	$lang['clientarea_details_state'] = 'Județ';
	$lang['clientarea_details_post_cade'] = 'Cod poștal';
	$lang['clientarea_details_country'] = 'Țara';
	$lang['clientarea_details_phone_number'] = 'Telefon';
	$lang['clientarea_details_payment_method'] = 'Modalitatea de plată';
	$lang['clientarea_details_save_changes'] = 'Salvare modificări';
	$lang['clientarea_details_cancel'] = 'Anulare';
	$lang['clientarea_following_errors'] = 'Au apărut următoarele erori:';
	$lang['clientarea_first_name_errors'] = 'Nu ați introdus prenumele';
	$lang['clientarea_last_name_errors'] = 'Nu ați introdus numele de familie';
	$lang['clientarea_address1_errors'] = 'Nu ați introdus adresa (linia 1)';
	$lang['clientarea_city_errors'] = 'Nu ați introdus orașul';
	$lang['clientarea_state_errors'] = 'Nu ați introdus județul';
	$lang['clientarea_postcode_errors'] = 'Nu ați introdus codul poștal';
	$lang['clientarea_country_errors'] = 'Alegeți țara dumneavoastră';
	$lang['clientarea_insert_db_errors'] = 'O problema cu insertarea in baza de date, contactati un administrator.';

	// Client area Change PW // 3.30.2017 2:20 PM
	$lang['clientarea_change_pw'] = 'Modificare parolă';
	$lang['clientarea_change_pw_portal_home'] = 'Portalul clienților';
	$lang['clientarea_change_pw_client_area'] = 'Contul meu';
	$lang['clientarea_change_pw_my_details'] = 'Detaliile mele';
	$lang['clientarea_change_pw_existing_password'] = 'Parola existentă';
	$lang['clientarea_change_pw_new_password'] = 'Parolă nouă';
	$lang['clientarea_change_pw_new_password_rating'] = 'Evaluare parolă nouă';
	$lang['clientarea_change_pw_tips'] = '<strong>Sfaturi pentru o parolă complexă</strong><br />Folosiți caractere mici și MARI<br />Includeți măcar două simboluri (# $ ! % &amp; etc.)<br />Nu folosiți cuvinte din dicționar';
	$lang['clientarea_change_pw_doesnotmatch'] = 'Parolele introduse nu se potrivesc';
	$lang['clientarea_change_pw_confirm_new_password'] = 'Confirmați noua parolă';
	$lang['clientarea_change_pw_save'] = 'Salvare modificări';
	$lang['clientarea_change_pw_cancel'] = 'Anulare';
	$lang['clientarea_change_pw_following_errors'] = 'Au apărut următoarele erori:';
	$lang['clientarea_change_pw_current_wrong'] = "Parola curentă nu este corectă";
	
	// client area emails - 5:23 PM
	$lang['clientarea_emails_my_emails'] = 'Mesajele mele';
	$lang['clientarea_emails_history'] = "Istoricul mesajelor";
	$lang['clientarea_emails_portal_home'] = 'Portalul clienților';
	$lang['clientarea_emails_clientarea'] = "Contul meu";
	$lang['search_no_records_found'] = "Nu sunt înregistrări";
	$lang['search_procesing'] = 'Se procesează...';
	$lang['search_tableshowing'] = "Se afișează articolele de la _START_ la _END_ din _TOTAL_";
	$lang['search_tableempty'] = "Se afișează articolele de la 0 la 0 din 0";
	$lang['search_tablefiltered'] = "(filtrate din cele _MAX_ (de) articole)";
	$lang['search_tablelength'] = "Articole pe pagină: _MENU_";
	$lang['search_tableloading'] = "Se încarcă...";
	$lang['search_first'] = "|«";
	$lang['search_last'] = "»|";
	$lang['search_next'] = "»";
	$lang['search_previous'] = "«";
	$lang['search_searchitem'] = 'caută...';
	$lang['clientarea_emails_date_send'] = 'Data expedierii';
	$lang['clientarea_emails_subject'] = 'Subiect';
	$lang['clientarea_emails_view_message'] = "Afișare mesaj";
	$lang['clientarea_emails_loading'] = 'Se încarcă...';
	
	// cart - 6:50 PM - nu traduce inca //
	$lang['cart_cartremoveitemconfirm'] = 'Sigur doriți să scoateți acest produs/serviciu din coș ul de cumpărături?';
	$lang['cart_cartemptyconfirm'] = 'Sigur doriți să goliți coșul de cumpărături?';
	$lang['cart_pwstrength'] = 'Complexitatea parolei';
	$lang['cart_pwstrengthweak'] = 'foarte slabă';
	$lang['cart_pwstrengthmoderate'] = 'bunicică';
	$lang['cart_pwstrengthstrong'] = 'puternică';
	$lang['cart_cartreviewcheckout'] = 'Finalizare comandă';
	$lang['cart_desc'] = 'Descriere';
	$lang['cart_price'] = 'Preț';
	$lang['cart_secure'] = 'Această comandă este procesată într-un mediu securizat, pentru a preveni orice fraude.<br />Adresa dumneavoastră IP';
	$lang['cart_secure2'] = 'a fost înregistrată.';
	$lang['cart_continueShopping'] = 'Continuați cumpărăturile';
	$lang['cart_emptycart'] = 'Golire coș';
	$lang['cart_paymenttermannually'] = 'Anual';
	$lang['cart_totalrecurring'] = 'Total de plată recurent';
	$lang['cart_totalduetoday'] = 'Total de plată azi';
	$lang['cart_subtotal'] = 'Subtotal';
	$lang['cart_remove'] = 'Șterge';
	$lang['cart_year'] = 'An';
	$lang['cart_years'] = 'Ani';
	
	// Invoices 12:19 PM v1.4
	$lang['invoices_my_invoices'] = 'Facturile mele';
	$lang['invoices_your_invoice_history_with_us'] = 'Istoricul facturilor emise';
	$lang['invoices_no_invoices'] = '0 facturi scadente';
	$lang['invoices_due_text'] = 'facturi scadente';
	$lang['invoices_no_invoices_text'] = 'Felicitări! Nu aveți restanțe de plată în acest moment.';
	$lang['invoices_masspayment'] = 'Achită tot';
	$lang['invoices_duemsg_1'] = 'În prezent aveți';
	$lang['invoices_duemsg_2'] = 'facturi neachitate, cu un o balanță totală de';
	$lang['invoices_status'] = 'Situația fiscală';
	$lang['invoices_status_paid'] = 'Facturi achitate';
	$lang['invoices_status_unpaid'] = 'Facturi neachitate';
	$lang['invoices_status_cancelled'] = 'Facturi anulate';
	$lang['invoices_status_refunded'] = 'Facturi stornate';
	$lang['invoices_loop_invoice'] = 'Factura #';
	$lang['invoices_loop_invoice_date'] = 'Data emiterii';
	$lang['invoices_loop_due_date'] = 'Data scadentă';
	$lang['invoices_loop_total'] = 'Total';
	$lang['invoices_loop_status'] = 'Total';
	// v1.4 NEW -> invoices partea 2
	$lang['invoices_loop_manageproduct'] = 'Configurare produs';
	
	// v1.4 My services
	$lang['myservices_title'] = 'Produsele și serviciile mele';
	$lang['myservices_view'] = 'Afișare';
	$lang['myservices_active'] = 'Activ';
	$lang['myservices_pending'] = 'În așteptare';
	$lang['myservices_suspended'] = 'Suspendat';
	$lang['myservices_terminated'] = 'Terminat';
	$lang['myservices_cancelled'] = 'Anulat';
	$lang['myservices_orderproduct'] = 'Produs/Serviciu';
	$lang['myservices_pricing'] = 'Prețuri';
	$lang['myservices_due_date'] = 'Următoarea scadență';
	$lang['myservices_status'] = 'Stare';
	$lang['myservices_manageproduct'] = 'Configurare produs';
	
	// v1.4 My Domains
	$lang['mydomains_title'] = 'Domeniile mele';
	$lang['mydomains_view'] = 'Afișare';
	$lang['mydomains_active'] = 'Activ';
	$lang['mydomains_pending'] = 'În așteptare';
	$lang['mydomains_expired'] = 'Expirat';
	$lang['mydomains_loop_domain'] = 'Domeniu';
	$lang['mydomains_loop_regdate'] = 'Data înregistrării';
	$lang['mydomains_loop_duedate'] = 'Următoarea scadență';
	$lang['mydomains_loop_autorew'] = 'Reînnoire automată';
	$lang['mydomains_loop_status'] = 'Stare';
	$lang['mydomains_managedomain'] = 'Configurare domeniu';
	
	// v1.4 Tickets
	$lang['tickets_title'] = 'Tichetele mele';
	$lang['tickets_title_2nd'] = 'Istoricul tichetelor de suport';
	$lang['tickets_view'] = 'Afișare';
	$lang['tickets_department'] = 'Departament';
	$lang['tickets_subject'] = 'Subiect';
	$lang['tickets_status'] = 'Stare';
	$lang['tickets_last_update'] = 'Ultima actualizare';
	$lang['tickets_open'] = 'Tichete deschise';
	$lang['tickets_answered'] = 'Tichete cu răspuns';
	$lang['tickets_customer_reply'] = 'Cu răspuns de la client';
	$lang['tickets_closed'] = 'Tichete închise';
	$lang['tickets_support'] = 'Asistență';
	$lang['tickets_announcements'] = 'Anunțuri';
	$lang['tickets_knowledgebase'] = 'Biblioteca de cunoștințe';
	$lang['tickets_downloads'] = 'Fișiere';
	$lang['tickets_open_ticket'] = 'Deschide un tichet';

	// v1.4 Tickets - open tickets
	$lang['tickets_open_ticket'] = 'Deschide un tichet';
	$lang['tickets_open_name'] = 'Nume';
	$lang['tickets_open_email'] = 'Adresa e-mail';
	$lang['tickets_open_subject'] = 'Subiect';
	$lang['tickets_open_department'] = 'Departament';
	$lang['tickets_open_prioritate'] = 'Prioritate';
	$lang['tickets_open_urgenta'] = 'Urgență';
	$lang['tickets_open_normala'] = 'Normală';
	$lang['tickets_open_scazuta'] = 'Scăzută';
	$lang['tickets_open_mesaj'] = 'Mesaj';
	$lang['tickets_ticket_created'] = 'Tichetul a fost generat';
	$lang['tickets_ticket_created_text'] = 'Sesizarea dumneavoastră a fost înregistrată cu succes. Pentru confirmare, un mesaj email cu datele sesizării v-a fost trimis la adresa înregistrată. Dacă doriţi să urmăriţi acest tichet online, puteţi face asta în portalul clienţilor.';
	
?>
