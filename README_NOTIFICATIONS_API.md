# Notifications API Documentation

This document outlines the API endpoints for the notifications system in the CBN application.

## Authentication

All API endpoints require authentication using a Bearer token.

Example:
```
Authorization: Bearer your-token-here
```

## API Endpoints

### Get All Notifications

Retrieves all notifications for the authenticated user.

**URL**: `/api/notifications`

**Method**: `GET`

**Response**:
```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "from": "21",
      "to": "16",
      "type": "referral",
      "related_id": 9,
      "title": "New Referral Received",
      "message": "PRAMOD KUMAR SAHU has sent you a new referral for sdfyguhk.",
      "read": false,
      "cleared": false,
      "created_at": "2025-05-13T04:47:45.000000Z",
      "updated_at": "2025-05-13T04:47:45.000000Z",
      "from_user": {
        "id": 21,
        "name": "PRAMOD KUMAR SAHU",
        "email": "pathideamultiskill@gmail.com",
        "profile_photo": "profile_photos/crZG1o6BbWjXj7ZPTgrGLqnPiq5IAyuEa6Yy9tRV.jpg"
      }
    }
  ],
  "message": "Notifications retrieved successfully"
}
```

### Get Unread Notifications Count

Retrieves the count of unread notifications for the authenticated user.

**URL**: `/api/notifications/unread-count`

**Method**: `GET`

**Response**:
```json
{
  "success": true,
  "data": {
    "count": 5
  },
  "message": "Unread notifications count retrieved"
}
```

### Mark Notification as Read

Marks a specific notification as read.

**URL**: `/api/notifications/mark-as-read/{id}`

**Method**: `POST`

**URL Parameters**:
- `id`: The ID of the notification to mark as read

**Response**:
```json
{
  "success": true,
  "message": "Notification marked as read"
}
```

### Mark All Notifications as Read

Marks all of the authenticated user's notifications as read.

**URL**: `/api/notifications/mark-all-as-read`

**Method**: `POST`

**Response**:
```json
{
  "success": true,
  "message": "All notifications marked as read"
}
```

### Clear a Notification

Clears (soft-deletes) a specific notification.

**URL**: `/api/notifications/clear/{id}`

**Method**: `POST`

**URL Parameters**:
- `id`: The ID of the notification to clear

**Response**:
```json
{
  "success": true,
  "message": "Notification cleared"
}
```

## Notification Types

The system supports the following notification types:

- `referral`: A new referral has been sent to the user
- `tyfcb`: A new thank you for closed business has been sent to the user
- `oto`: A new one-to-one meeting has been scheduled with the user
- `ceu`: System notification (e.g., welcome message, announcements)

## React Native Integration

To integrate with your React Native application, you can use the `utils/api.ts` file to add the following API functions:

```typescript
// Notification types
export interface Notification {
  id: number;
  from: string;
  to: string;
  type: 'referral' | 'thank_you' | 'one_to_one' | 'ceu';
  related_id: number | null;
  title: string;
  message: string;
  read: boolean;
  cleared: boolean;
  created_at: string;
  updated_at: string;
  from_user?: {
    id: number;
    name: string;
    email: string;
    profile_photo: string | null;
  };
}

// Get all notifications
export const getNotifications = async (): Promise<{ success: boolean; data: Notification[] | null; message: string }> => {
  try {
    const response = await apiClient.get('/notifications');
    return response.data;
  } catch (error) {
    console.error('Error fetching notifications:', error);
    return { success: false, data: null, message: 'Failed to fetch notifications' };
  }
};

// Mark notification as read
export const markNotificationAsRead = async (id: number): Promise<{ success: boolean; message: string }> => {
  try {
    const response = await apiClient.post(`/notifications/mark-as-read/${id}`);
    return response.data;
  } catch (error) {
    console.error('Error marking notification as read:', error);
    return { success: false, message: 'Failed to mark notification as read' };
  }
};

// Mark all notifications as read
export const markAllNotificationsAsRead = async (): Promise<{ success: boolean; message: string }> => {
  try {
    const response = await apiClient.post('/notifications/mark-all-as-read');
    return response.data;
  } catch (error) {
    console.error('Error marking all notifications as read:', error);
    return { success: false, message: 'Failed to mark all notifications as read' };
  }
};

// Get unread notifications count
export const getUnreadCount = async (): Promise<{ success: boolean; data: { count: number } | null; message: string }> => {
  try {
    const response = await apiClient.get('/notifications/unread-count');
    return response.data;
  } catch (error) {
    console.error('Error fetching unread count:', error);
    return { success: false, data: null, message: 'Failed to fetch unread count' };
  }
};

// Clear a notification
export const clearNotification = async (id: number): Promise<{ success: boolean; message: string }> => {
  try {
    const response = await apiClient.post(`/notifications/clear/${id}`);
    return response.data;
  } catch (error) {
    console.error('Error clearing notification:', error);
    return { success: false, message: 'Failed to clear notification' };
  }
};
``` 