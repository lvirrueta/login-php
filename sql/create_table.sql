CREATE TABLE "tblUsers" (
	"user_id" serial PRIMARY KEY,
	"user_strName" VARCHAR ( 50 ) UNIQUE NOT NULL,
	"user_strPassword" VARCHAR ( 255 ) NOT NULL,
	"user_strEmail" VARCHAR ( 255 ) UNIQUE NOT NULL,
	"user_dtmCreatedAt" TIMESTAMP NOT NULL
);
