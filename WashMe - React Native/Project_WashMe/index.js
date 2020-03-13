import {AppRegistry} from 'react-native';
import App from './App';
import {name as appName} from './app.json';
import 'react-native-gesture-handler';
import * as React from 'react';
import {navigationAppContainer} from 'react-navigation';
import {createStackNavigator} from 'react-navigation-stack';
import secondStarted from './screen/secondStarted';

AppRegistry.registerComponent(appName, () => App);

const screens = {
    home : {
        screen : App
    },
    secondStarted: {
        screen: secondStarted,
    },
}

export const Stack = createStackNavigator(screens);

