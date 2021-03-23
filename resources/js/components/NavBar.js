import React from 'react';
import { Link } from 'react-router-dom';

const NavBar = () => {
    return (
        <div className="nav">
            <label className="uma">ウマ娘攻略</label>
            <Link to="/helper" className="uma">このサイトの使い方</Link>
            <Link to="/" className="space">Home|</Link>
            <Link to="/user" className="space"><i className="fas fa-sign-in-alt"></i>ログイン|</Link>
            <Link to="/about" className="space"><i className="far fa-user"></i>新規登録</Link>
        </div>
    );
}

export default NavBar;