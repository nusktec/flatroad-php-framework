<?php
const HTML_META_TAGS = "dashboard, rsc byte limited, coding"; //base html tags
const HTML_META_AUTHOR = "RSC BYTE LIMITED"; //based author
const APP_DEV_MODE=true; //application in development mode,
const APP_TURBO_MODE=false; //application in turbo mode, loading faster. note: make sure you perform all form submission in ajax call or axio
const APP_USE_AXIOS=true; //use axios library
//application base folder name
const APP_BASE_NAME="/wc_superadmin/"; //with a trailing slash
const APP_FILE_PATH="http://localhost/wc_superadmin/";
//Database config
const DB_HOST='localhost';
const DB_USER='root';
const DB_PASS='mysql';
const DB_NAME='wnc';
//show general error
const APP_HIDE_ERROR=false;
//allow any domain to access your api
const APP_ALLOW_OTHERS=true;
const APP_API_DOMAIN_ONLY='*';
//server hand shake code
const SSK="73050f3f22f18a7174b691b07f394d00eb661221"; //server secrete key
const SESSION_NAME='engine';
