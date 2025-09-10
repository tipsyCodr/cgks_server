# Meetings API Documentation

This document outlines the API endpoints for the meetings system in the CBN application.

## Authentication

All API endpoints require authentication using a Bearer token.

Example:
```
Authorization: Bearer your-token-here
```

## API Endpoints

### Get Next Meeting

Retrieves the next upcoming meeting from the current date.

**URL**: `/api/meetings/next`

**Method**: `GET`

**Response**:
```json
{
  "success": true,
  "data": {
    "id": 3,
    "name": "Leadership Training Workshop",
    "date": "2025-05-20",
    "start_time": "09:00:00",
    "end_time": "17:00:00",
    "tyfcb": "₹ 75,000",
    "visitors": "10",
    "speakers": "Michael Scott, Dwight Schrute",
    "created_at": "2025-05-13T04:47:45.000000Z",
    "updated_at": "2025-05-13T04:47:45.000000Z"
  },
  "message": "Next meeting retrieved successfully"
}
```

**Error Response** (When no upcoming meetings):
```json
{
  "success": false,
  "message": "No upcoming meetings found"
}
```

### Get All Upcoming Meetings

Retrieves all meetings from the current date onwards, ordered by date.

**URL**: `/api/meetings/upcoming`

**Method**: `GET`

**Response**:
```json
{
  "success": true,
  "data": [
    {
      "id": 2,
      "name": "Weekly Networking Session",
      "date": "2025-05-13",
      "start_time": "14:00:00",
      "end_time": "16:00:00",
      "tyfcb": "₹ 25,000",
      "visitors": "3",
      "speakers": "Bob Johnson",
      "created_at": "2025-05-13T04:47:45.000000Z",
      "updated_at": "2025-05-13T04:47:45.000000Z"
    },
    {
      "id": 3,
      "name": "Leadership Training Workshop",
      "date": "2025-05-20",
      "start_time": "09:00:00",
      "end_time": "17:00:00",
      "tyfcb": "₹ 75,000",
      "visitors": "10",
      "speakers": "Michael Scott, Dwight Schrute",
      "created_at": "2025-05-13T04:47:45.000000Z",
      "updated_at": "2025-05-13T04:47:45.000000Z"
    },
    {
      "id": 4,
      "name": "Annual General Meeting",
      "date": "2025-06-12",
      "start_time": "10:00:00",
      "end_time": "18:00:00",
      "tyfcb": "₹ 150,000",
      "visitors": "20",
      "speakers": "CEO, CFO, Chapter President",
      "created_at": "2025-05-13T04:47:45.000000Z",
      "updated_at": "2025-05-13T04:47:45.000000Z"
    }
  ],
  "message": "Upcoming meetings retrieved successfully"
}
```

## Meeting Structure

A meeting object contains the following fields:

| Field       | Type     | Description                              |
|-------------|----------|------------------------------------------|
| id          | integer  | Unique identifier for the meeting        |
| name        | string   | Name or title of the meeting             |
| date        | date     | Date of the meeting (YYYY-MM-DD format)  |
| start_time  | string   | Start time of the meeting (HH:MM:SS)     |
| end_time    | string   | End time of the meeting (HH:MM:SS)       |
| tyfcb       | string   | Thank You For Closed Business amount     |
| visitors    | string   | Number of visitors attending             |
| speakers    | string   | Names of speakers at the meeting         |
| created_at  | datetime | When the record was created              |
| updated_at  | datetime | When the record was last updated         |

## React Native Integration

To integrate with your React Native application, you can add the following API functions to your `utils/api.ts` file:

```typescript
// Meeting interface
export interface Meeting {
  id: number;
  name: string;
  date: string;
  start_time: string | null;
  end_time: string | null;
  tyfcb: string | null;
  visitors: string | null;
  speakers: string | null;
  created_at: string;
  updated_at: string;
}

// Get the next upcoming meeting
export const getNextMeeting = async (): Promise<{ success: boolean; data: Meeting | null; message: string }> => {
  try {
    const response = await apiClient.get('/meetings/next');
    return response.data;
  } catch (error) {
    console.error('Error fetching next meeting:', error);
    return { success: false, data: null, message: 'Failed to fetch next meeting' };
  }
};

// Get all upcoming meetings
export const getUpcomingMeetings = async (): Promise<{ success: boolean; data: Meeting[] | null; message: string }> => {
  try {
    const response = await apiClient.get('/meetings/upcoming');
    return response.data;
  } catch (error) {
    console.error('Error fetching upcoming meetings:', error);
    return { success: false, data: null, message: 'Failed to fetch upcoming meetings' };
  }
};
```

## Example Usage in React Native

Here's an example of how to use these APIs in your React Native components:

```tsx
import React, { useEffect, useState } from 'react';
import { View, Text, StyleSheet, ActivityIndicator } from 'react-native';
import { getNextMeeting, Meeting } from '../utils/api';
import { formatDate } from '../utils/dateUtils';

const NextMeetingCard = () => {
  const [meeting, setMeeting] = useState<Meeting | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchNextMeeting = async () => {
      setLoading(true);
      try {
        const response = await getNextMeeting();
        if (response.success) {
          setMeeting(response.data);
          setError(null);
        } else {
          setError(response.message);
          setMeeting(null);
        }
      } catch (err) {
        setError('An error occurred while fetching the next meeting');
        setMeeting(null);
      } finally {
        setLoading(false);
      }
    };

    fetchNextMeeting();
  }, []);

  if (loading) {
    return <ActivityIndicator size="large" color="#0000ff" />;
  }

  if (error) {
    return (
      <View style={styles.container}>
        <Text style={styles.errorText}>{error}</Text>
      </View>
    );
  }

  if (!meeting) {
    return (
      <View style={styles.container}>
        <Text style={styles.noMeetingText}>No upcoming meetings scheduled</Text>
      </View>
    );
  }

  return (
    <View style={styles.container}>
      <Text style={styles.title}>{meeting.name}</Text>
      <Text style={styles.date}>{formatDate(meeting.date)}</Text>
      <Text style={styles.time}>
        {meeting.start_time} - {meeting.end_time}
      </Text>
      {meeting.speakers && (
        <Text style={styles.speakers}>Speakers: {meeting.speakers}</Text>
      )}
      {meeting.visitors && (
        <Text style={styles.visitors}>Expected Visitors: {meeting.visitors}</Text>
      )}
      {meeting.tyfcb && (
        <Text style={styles.tyfcb}>TYFCB: {meeting.tyfcb}</Text>
      )}
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#fff',
    borderRadius: 8,
    padding: 16,
    margin: 16,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 4,
    elevation: 2,
  },
  title: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 8,
  },
  date: {
    fontSize: 16,
    color: '#555',
    marginBottom: 4,
  },
  time: {
    fontSize: 16,
    color: '#555',
    marginBottom: 8,
  },
  speakers: {
    fontSize: 14,
    marginTop: 8,
  },
  visitors: {
    fontSize: 14,
    marginTop: 4,
  },
  tyfcb: {
    fontSize: 14,
    marginTop: 4,
    fontWeight: '500',
  },
  errorText: {
    color: 'red',
    textAlign: 'center',
  },
  noMeetingText: {
    textAlign: 'center',
    color: '#666',
  },
});

export default NextMeetingCard;
``` 