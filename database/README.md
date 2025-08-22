# Matrimony BD Database Setup

This document provides instructions for setting up the database for the Matrimony BD website.

## Prerequisites

- XAMPP installed and running
- MySQL service running
- phpMyAdmin access (optional but recommended)

## Database Setup Instructions

### 1. Start XAMPP Services

1. Open XAMPP Control Panel
2. Start Apache and MySQL services
3. Ensure both services show green status

### 2. Create Database

#### Option A: Using phpMyAdmin (Recommended)

1. Open your browser and go to: `http://localhost/phpmyadmin`
2. Click on "New" in the left sidebar
3. Enter database name: `matrimony_bd`
4. Click "Create"

#### Option B: Using MySQL Command Line

```bash
mysql -u root -p
CREATE DATABASE matrimony_bd;
USE matrimony_bd;
```

### 3. Import Database Structure

#### Option A: Using phpMyAdmin

1. Select the `matrimony_bd` database
2. Click on "Import" tab
3. Choose the `matrimony_bd.sql` file
4. Click "Go" to import

#### Option B: Using MySQL Command Line

```bash
mysql -u root -p matrimony_bd < matrimony_bd.sql
```

### 4. Verify Database Setup

After import, you should see the following tables:

- `users` - Main user profiles
- `partner_preferences` - User match preferences
- `profile_photos` - User photos
- `matches` - AI-generated matches
- `messages` - User messaging
- `profile_views` - Profile view tracking
- `interest_requests` - Interest requests
- `user_verifications` - Verification status
- `user_sessions` - User sessions
- `user_activity_log` - Activity logging
- `admin_users` - Admin accounts
- `reported_profiles` - Profile reports
- `subscription_plans` - Available plans
- `user_subscriptions` - User subscriptions

## Database Configuration

### 1. Update Configuration File

Edit `config/database.php` and update these values if needed:

```php
define('DB_HOST', 'localhost');     // Database host
define('DB_NAME', 'matrimony_bd');  // Database name
define('DB_USER', 'root');          // Database username
define('DB_PASS', '');              // Database password
```

### 2. Test Connection

You can test the database connection by visiting:
`http://localhost/1234/test_db.php` (if you create this file)

## Database Features

### 1. User Management
- Complete user registration and profiles
- Partner preferences and match criteria
- Profile verification system
- Photo management

### 2. Matching System
- AI-powered compatibility scoring
- Match suggestions and responses
- Interest requests and responses
- Profile view tracking

### 3. Communication
- Private messaging system
- Message read status tracking
- Conversation management

### 4. Security & Verification
- Password hashing
- Session management
- Email and mobile verification
- Activity logging

### 5. Subscription Management
- Multiple subscription plans
- Payment tracking
- Feature access control

### 6. Admin Features
- User management
- Profile moderation
- Report handling
- System monitoring

## Database Views

### 1. `user_profiles`
Combines user information with partner preferences for easy querying.

### 2. `match_suggestions`
Provides compatibility scoring for potential matches.

## Stored Procedures

### 1. `CreateUserWithPreferences`
Creates a new user account with partner preferences in a single transaction.

### 2. `GetUserMatches`
Retrieves all matches for a specific user with detailed information.

## Triggers

### 1. `update_user_age`
Automatically updates user age when date of birth changes.

### 2. `log_user_activity`
Logs user activity when new profiles are created.

## Performance Optimization

The database includes:
- Strategic indexes on frequently queried columns
- Composite indexes for complex queries
- Optimized table structures
- Efficient foreign key relationships

## Backup & Maintenance

### 1. Regular Backups
```bash
mysqldump -u root -p matrimony_bd > backup_$(date +%Y%m%d).sql
```

### 2. Database Maintenance
```sql
-- Analyze table performance
ANALYZE TABLE users, matches, messages;

-- Optimize tables
OPTIMIZE TABLE users, matches, messages;
```

## Security Considerations

1. **Password Security**: All passwords are hashed using PHP's `password_hash()`
2. **SQL Injection Protection**: Uses prepared statements throughout
3. **Input Sanitization**: All user inputs are sanitized
4. **Session Security**: Secure session token generation
5. **Access Control**: Role-based admin access

## Troubleshooting

### Common Issues

1. **Connection Failed**
   - Check if MySQL service is running
   - Verify database credentials in `config/database.php`
   - Ensure database `matrimony_bd` exists

2. **Import Errors**
   - Check MySQL version compatibility
   - Ensure sufficient memory for large imports
   - Verify SQL file integrity

3. **Permission Issues**
   - Ensure MySQL user has proper privileges
   - Check file permissions for log directories

### Support

If you encounter issues:
1. Check XAMPP error logs
2. Verify MySQL error logs
3. Test database connection manually
4. Ensure all required PHP extensions are enabled

## Next Steps

After database setup:
1. Test the registration system
2. Verify user login functionality
3. Test the matching algorithm
4. Configure admin access
5. Set up email verification (if applicable)

## Database Schema Diagram

The database follows a normalized structure with:
- **Core Tables**: users, partner_preferences, profile_photos
- **Interaction Tables**: matches, messages, interest_requests
- **System Tables**: admin_users, user_sessions, activity_logs
- **Business Tables**: subscription_plans, user_subscriptions

This structure ensures data integrity, performance, and scalability for your matrimony website.
