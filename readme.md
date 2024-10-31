## Overview

This sample application is broken up into two parts, a PowerSchool customization within the powerschool directory, and essential files built in an external API that connects to one of our MS SQL DBs. 

It's very simple, but covers jQuery, tlist_sql, external API development, creating and dealing with JSON payloads, and querying ORACLE and MS SQL databases. Its purpose is to present the upload history and current processing status of bulk document uploads from within PowerSchool. 

Inside of powerschool/WEB_ROOT/admin/records/history.html is the customized PowerSchool page (I took a screenshot of the rendered page and dropped it in /screenshot)

/external_api holds a heavily truncated controller and model built in PHP using CodeIgniter 4 as a framework.