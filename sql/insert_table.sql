-- password: "user1234"
INSERT INTO "tblUsers"( "user_strName", "user_strPassword", "user_strEmail", "user_dtmCreatedAt" )
VALUES ( 'luis', '$2y$10$.v8NzXyWeIKPcmhHjMv.I.IbZ5K6nJEsuZvu0tKGgCBdqmfRwLv.S', 'luis@gmail.com', current_timestamp )
RETURNING *;
