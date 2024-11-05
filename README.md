### Identity Reconciliation System

**Identity Reconciliation** is a solution designed to tackle the complex problem of unifying multiple representations of a single individual across various data sources or records. This system aims to identify unique individuals despite discrepancies in contact information, such as variations in email addresses or phone numbers.

#### Problem Statement

In large databases or applications that store user information, it’s common for individuals to be represented by multiple records, each potentially associated with a different email, phone number, or other contact data. These duplications can lead to data fragmentation, inconsistency, and difficulties in accurately recognizing and consolidating user records. Identity reconciliation addresses this issue by intelligently linking and unifying related records, allowing organizations to maintain a clean and consistent dataset.

#### Solution Overview

The **Identity Reconciliation System** is built to:
1. **Identify Unique Users:** By analyzing provided contact data (like email and phone number), the system determines if the individual is already represented within the database.
2. **Classify Records as Primary or Secondary:** The system designates a “primary” contact entry for each unique user, linking any additional (secondary) entries to this primary record. This approach ensures that all relevant information is accessible via a single identity.
3. **Manage and Update Records**: New records are created as needed, while existing records are updated to link secondary contacts to their primary contact entry. This prevents duplication and ensures that each user’s data is centralized under a single, consolidated record.

#### System Workflow

1. **Input Data Collection**:
   - The system receives a user’s contact data (email and/or phone number) from the frontend interface.

2. **Database Query for Existing Records**:
   - Using SQL queries, the system checks if the provided contact information (email or phone number) already exists in the database.

3. **Record Classification**:
   - If both an email and phone number are found, the system checks if they belong to the same individual by examining their `linked_id` and `link_precedence`.
   - If only one contact type matches, the system creates a secondary link to an existing primary contact if needed.

4. **New Record Creation**:
   - If neither the email nor phone number exists in the database, a new primary record is created for this unique user.

5. **Output**:
   - A structured response returns the unified identity information, including primary and secondary contacts, ensuring a consolidated view of the user’s data.

#### Technology Stack

- **Backend**: Spring Boot framework with JDBC and SQL for database operations.
- **Database**: SQL table to store user contact information with primary and secondary relationships.
- **Frontend**: HTML, JavaScript for input handling, AJAX for asynchronous communication with the backend.

#### Benefits

By resolving data fragmentation and maintaining a single, unified view of each user, the Identity Reconciliation System:
- Enhances data quality and reliability.
- Supports better data analysis by reducing redundancies.
- Improves user management efficiency for applications with large user bases.

This solution is ideal for any application that requires accurate user identity management, especially those with large and frequently updated user databases.
