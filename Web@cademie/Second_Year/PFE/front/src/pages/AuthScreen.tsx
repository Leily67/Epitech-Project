import React, { useState } from 'react';
import { View, TextInput, Button, StyleSheet, Text } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import UserProfile from './UserProfile';
import axios from 'axios';
import AsyncStorage from '@react-native-async-storage/async-storage';
import { API_BASE_URL } from '@env';

interface RegisterFormData {
  mail: string;
  password: string;
}

interface LoginFormData {
  mail: string;
  password: string;
}

interface IUser {
  mail: string;
  password: string;
}


const AuthScreen = () => {
  const [registerFormData, setRegisterFormData] = useState<RegisterFormData>({ mail: '', password: '' });
  const [loginFormData, setLoginFormData] = useState<LoginFormData>({ mail: '', password: '' });
  const navigation = useNavigation();
  const [showLoginForm, setShowLoginForm] = useState(false);


  const handleRegister = async () => {
    try {
      const response = await axios.post(`${process.env.API_BASE_URL}/auth/register`, registerFormData);
      console.log('Registration successful!', response.data);
      const user = response.data;
      saveUserToStorage(user);
    } catch (error) {
      console.error('Registration failed.', error);
    }
  };

  const saveUserToStorage = async (user: IUser) => {
    try {
      const userString = JSON.stringify(user);
      await AsyncStorage.setItem('user', userString);
      console.log('User retrieved from storage:', user);
      console.log('User saved to storage:', user);
    } catch (error) {
      console.error('Error saving user to storage:', error);
    }
  };

  const handleLogin = async () => {
    try {
      const response = await axios.post(`${API_BASE_URL}/auth/login`, loginFormData);
      console.log('Login successful!', response.data);
      const user = response.data;
      saveUserToStorage(user);
      navigation.navigate('UserProfile');
    } catch (error) {
      console.error('Login failed.', error);
    }
  };

  const toggleForm = () => {
    setShowLoginForm(!showLoginForm);
  };

  return (
    <View style={styles.container}>
      {!showLoginForm && (
        <>
          <Text style={styles.regText}>Register</Text>
          <TextInput
            style={styles.input}
            placeholder="Email"
            value={registerFormData.mail}
            onChangeText={(text) => setRegisterFormData({ ...registerFormData, mail: text })}
          />
          <TextInput
            style={styles.input}
            placeholder="Password"
            secureTextEntry={true}
            value={registerFormData.password}
            onChangeText={(text) => setRegisterFormData({ ...registerFormData, password: text })}
          />
          <View style={styles.regBtn}>

            <Button title="Register" onPress={handleRegister} />
          </View>
          <View style={styles.logBtn}>
            <Button color="green" title="Login" onPress={toggleForm} />
          </View>
        </>
      )}
      {showLoginForm && (
        <>
          <Text style={styles.loginText}>Login</Text>

          <TextInput
            style={styles.input}
            placeholder="Email"
            value={loginFormData.mail}
            onChangeText={(text) => setLoginFormData({ ...loginFormData, mail: text })}
          />
          <TextInput
            style={styles.input}
            placeholder="Password"
            secureTextEntry={true}
            value={loginFormData.password}
            onChangeText={(text) => setLoginFormData({ ...loginFormData, password: text })}
          />
          <View style={styles.logBtn}>

            <Button color="green" title="Login" onPress={handleLogin} />
          </View>
          <View style={styles.regBtn}>

            <Button title="Register" onPress={toggleForm} />
          </View>

        </>
      )}

    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  input: {
    width: '80%',
    height: 40,
    marginVertical: 10,
    paddingHorizontal: 10,
    borderColor: 'gray',
    borderWidth: 1,
    borderRadius: 5,
  },
  loginText: {
    fontSize: 22,
  },
  regText: {
    fontSize: 22,
  },
  logBtn: {
    padding: 10,
    marginTop: 10,
    width: 330
  },
  regBtn: {
    padding: 10,
    marginTop: 10,
    width: 330
  }
});

export default AuthScreen;