It Is A Site That I Made For Labinta Malik A Vfx Artist From Us.

## Mail configuration

Set these environment variables in the PHP hosting environment before using the
contact and application forms. Do not put SMTP passwords in source control.

Contact form:

- `CONTACT_SMTP_HOST`
- `CONTACT_SMTP_USERNAME`
- `CONTACT_SMTP_PASSWORD`
- `CONTACT_EMAIL`

Application form:

- `APPLICATION_SMTP_HOST`
- `APPLICATION_SMTP_USERNAME`
- `APPLICATION_SMTP_PASSWORD`
- `APPLICATION_EMAIL`

The contact form uses SMTP port 465 with implicit TLS. The application form
uses SMTP port 587 with STARTTLS.
