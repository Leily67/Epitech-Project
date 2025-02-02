import React, { useState, useEffect } from "react";
import { Button, Text, View, TouchableOpacity } from "react-native";
import { useNavigation } from "@react-navigation/native";
import axios from "axios";
import AsyncStorage from '@react-native-async-storage/async-storage';
import { Ionicons } from '@expo/vector-icons';
import { StyleSheet } from 'react-native';
import { FontAwesome } from '@expo/vector-icons';
import Header from "./Header";
import NavProfile from "./NavProfile";
import UserInfo from "./UserInfo";
import { API_BASE_URL } from '@env';




interface UserProfileProps {
  jwt: string;
}

const UserProfile: React.FC<UserProfileProps> = ({ jwt }) => {
  const [mail, setEmail] = useState<string>();
  const navigation = useNavigation();
  const [loading, setLoading] = useState<boolean>(true);
  const [token, getItem] = useState<string>("");


  const fetchUser = async () => {
    try {
      const token = await AsyncStorage.getItem('access_token');
      if (token !== null) {
        getItem(token);
        const response = await axios.get(`${API_BASE_URL}/profile`, {
          headers: { Authorization: `Bearer ${token}` },
        });
        setEmail(response.data.mail);
      } else {
        console.log("Access token not found.");
      }
    } catch (error) {
      console.error("Error fetching user:", error);
    }
    setLoading(false);
  };

  useEffect(() => {
    fetchUser();
  }, []);

  const handleLogout = () => {
    navigation.navigate("Homepage");
  };

  if (loading) {
    return <Text>Loading...</Text>;
  }

  return (
    <View style={styles.container}>
      <Header />
      <UserInfo />
      <Text style={styles.textWelcome}>Welcome, {mail}!</Text>
      <Text style={styles.textApp}>Start your day with our application to control your calories</Text>
      <NavProfile />
      <TouchableOpacity onPress={handleLogout} style={styles.buttonLogout}>
        <Text style={styles.textLogout}>Logout</Text>
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  textLogout: {
    backgroundColor: 'red',
    padding: 10,
    textAlign: 'center',
    color: 'white',
    fontSize: 16,
    borderRadius: 50,
  },
  buttonLogout: {
    paddingHorizontal: 110,
    backgroundColor: '#FCF0D1',
    marginTop: 5

  },
  textWelcome: {
    backgroundColor: '#FFFAED',
    textAlign: 'center',
    fontSize: 22,
    color: '#5C0B41A1',
    fontWeight: '700'
  },
  textApp: {
    textAlign: 'center',
    fontSize: 16,
    color: '#706C6C',
    fontWeight: '700',
    backgroundColor: '#FFFAED',

  }
});

export default UserProfile;