import { StatusBar } from 'expo-status-bar';
import React, { useState, useEffect } from "react";
import { Button, Text, View, TouchableOpacity } from "react-native";
import { useNavigation } from "@react-navigation/native";
import axios from "axios";
import AsyncStorage from '@react-native-async-storage/async-storage';
import { Ionicons } from '@expo/vector-icons';
import { StyleSheet } from 'react-native';
import { FontAwesome } from '@expo/vector-icons';


type Props = {
    onPressButton1: () => void;
    onPressButton2: () => void;
    onPressButton3: () => void;
    onPressAdd: () => void;
};


function onPressButton1() {
    console.log('Button 2 was pressed');
}


function onPressButton2() {
    console.log('Button 2 was pressed');
}

function onPressButton3() {
    console.log('Button 3 was pressed');
}



function onPressButton4() {
    console.log('Button 3 was pressed');
}




export default function NavProfile() {
    return (
        <View style={styles.container}>
            <TouchableOpacity onPress={onPressButton1} style={styles.button}>
                <Text style={styles.addButton}>+</Text>
            </TouchableOpacity>
            <TouchableOpacity onPress={onPressButton2} style={styles.button}>
                <Text style={styles.buttonText}>Progress</Text>
            </TouchableOpacity>
            <TouchableOpacity onPress={onPressButton3} style={styles.button}>
                <Text style={styles.buttonText}>Product</Text>
            </TouchableOpacity>
            <TouchableOpacity onPress={onPressButton4} style={styles.button}>
                <Text style={styles.buttonText}>Settings</Text>
            </TouchableOpacity>
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'flex-end',
        backgroundColor: '#FCF0D1',
        marginTop: 5
    },
    addButton: {

        borderRadius: 50,
        justifyContent: 'center',
        alignItems: 'center',
        textAlign: 'center',
        backgroundColor: '#7FCC86',
        color: 'white',
        fontSize: 35,
        borderTopWidth: 3,
        borderBottomWidth: 3,
        borderLeftWidth: 3,
        borderRightWidth: 3,
        borderTopColor: 'white',
        borderBottomColor: 'white',
        borderLeftColor: 'white',
        borderRightColor: 'white',

    },
    button: {
        paddingHorizontal: 50,
    },
    buttonText: {
        color: '#fff',
        fontWeight: 'bold',
        fontSize: 16,
        textAlign: 'center',
        padding: 10,
        backgroundColor: '#7FCC86',
        margin: 10,
        borderRadius: 50,
        shadowColor: 'black',
        elevation: 8,
        borderTopColor: 'white',
    },
});
